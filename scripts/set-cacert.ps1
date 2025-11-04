# Run as Admin. Script will:
# 1) backup php.ini
# 2) download cacert.pem to project storage/certs
# 3) set curl.cainfo in php.ini (replace or append)
# 4) show quick verification output

# --- Configuration (edit if needed) ---
$phpIni = 'C:\wamp64\bin\php\php8.3.0\php.ini'    # detected php.ini path - change if different
$certDest = 'C:\wamp64\www\iziechem\storage\certs\cacert.pem'
$certUrls = @(
    'https://curl.se/ca/cacert.pem',
    'https://raw.githubusercontent.com/bagder/ca-bundle/master/ca-bundle.crt'
)
# ---------------------------------------

# require admin
$principal = New-Object Security.Principal.WindowsPrincipal([Security.Principal.WindowsIdentity]::GetCurrent())
if (-not $principal.IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)) {
    Write-Error "Please run PowerShell as Administrator and re-run this script."
    exit 1
}

# checks
if (-not (Test-Path $phpIni)) {
    Write-Error "php.ini not found at $phpIni. Update the $phpIni variable to the correct path and re-run."
    exit 1
}

# create cert folder
$certDir = Split-Path $certDest -Parent
if (-not (Test-Path $certDir)) {
    New-Item -Path $certDir -ItemType Directory -Force | Out-Null
    Write-Host "Created directory: $certDir"
}

# backup php.ini
$timestamp = (Get-Date).ToString('yyyyMMddHHmmss')
$backup = "$phpIni.bak.$timestamp"
Copy-Item -Path $phpIni -Destination $backup -Force
Write-Host "Backed up php.ini to: $backup"

# download cacert (try multiple sources)
$downloaded = $false
foreach ($url in $certUrls) {
    try {
        Write-Host "Attempting download: $url"
        Invoke-WebRequest -Uri $url -OutFile $certDest -UseBasicParsing -ErrorAction Stop
        Write-Host "Downloaded cacert to: $certDest"
        $downloaded = $true
        break
    } catch {
        Write-Warning "Failed to download from $url : $($_.Exception.Message)"
    }
}

if (-not $downloaded) {
    Write-Warning "All downloads failed. Please download a CA bundle manually and place it at: $certDest"
    exit 1
}

# update php.ini: replace existing curl.cainfo line (commented or not) or append if missing
$iniText = Get-Content -Path $phpIni -Raw -ErrorAction Stop
$pattern = '(?mi)^[\s;]*curl\.cainfo\s*=.*$'
$replacement = 'curl.cainfo = "' + $certDest + '"'

if ($iniText -match $pattern) {
    $newText = [Regex]::Replace($iniText, $pattern, $replacement)
    Set-Content -Path $phpIni -Value $newText -Encoding ASCII
    Write-Host "Replaced existing curl.cainfo line in php.ini"
} else {
    # append at end
    Add-Content -Path $phpIni -Value "`r`n# Added by script on $((Get-Date).ToString())`r`n$replacement"
    Write-Host "Appended curl.cainfo to php.ini"
}

# show quick verification info
Write-Host ""
Write-Host "php.ini updated. Please restart WAMP/Apache for changes to take effect."
Write-Host "Now verifying PHP picks up the change (php CLI may use different ini than Apache):"
try {
    $phpIniLoaded = & php --ini 2>&1
    Write-Host $phpIniLoaded
} catch {
    Write-Warning "php --ini failed. Ensure 'php' is on PATH or run php -i instead."
}

try {
    $caInfo = & php -r "echo ini_get('curl.cainfo');" 2>&1
    Write-Host "php ini_get('curl.cainfo') => $caInfo"
} catch {
    Write-Warning "Could not run php to verify ini setting. You may need to run the commands manually."
}

Write-Host ""
Write-Host "Next steps:"
Write-Host "  1) Restart WAMP/Apache."
Write-Host "  2) Test your chatbot again."
Write-Host "  3) If Apache uses a different PHP than CLI, edit that php.ini too (check phpinfo() in a web page)."
