<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Contact Form Submission</title>
    <style type="text/css">
        /* Reset styles */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        
        /* Responsive styles */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                margin: 10px auto !important;
            }
            .header {
                padding: 30px 20px !important;
            }
            .header h1 {
                font-size: 24px !important;
            }
            .content-section {
                padding: 30px 20px !important;
            }
            .info-card {
                padding: 16px !important;
                margin-bottom: 12px !important;
            }
            .info-card-title {
                font-size: 10px !important;
            }
            .info-card-value {
                font-size: 16px !important;
            }
            .message-box {
                padding: 20px !important;
            }
            .message-text {
                font-size: 14px !important;
            }
            .services-section {
                padding: 20px !important;
            }
            .service-item {
                flex: 1 1 45% !important;
                min-width: 80px !important;
                margin-bottom: 15px !important;
            }
            .service-icon {
                font-size: 24px !important;
            }
            .footer {
                padding: 20px !important;
            }
        }
        
        @media only screen and (max-width: 400px) {
            .header h1 {
                font-size: 20px !important;
            }
            .service-item {
                flex: 1 1 100% !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    
    <div class="email-container" style="max-width: 650px; margin: 40px auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
        
        <!-- Header with Texture -->
        <div class="header" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); padding: 40px 30px; position: relative; overflow: hidden;">
            <!-- Decorative Pattern Overlay -->
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,.05) 10px, rgba(255,255,255,.05) 20px); pointer-events: none;"></div>
            
            <div style="position: relative; z-index: 1;">
                <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600; letter-spacing: -0.5px;">
                    ✨ New Client Inquiry
                </h1>
                <p style="margin: 8px 0 0 0; color: #ecf0f1; font-size: 14px; opacity: 0.9;">
                    Contact Form Submission
                </p>
            </div>
            
            <!-- Decorative Corner -->
            <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.05); border-radius: 50%; pointer-events: none;"></div>
        </div>

        <!-- Content Section -->
        <div class="content-section" style="padding: 40px 30px;">
            
            <!-- Info Cards Grid -->
            <div style="margin-bottom: 30px;">
                
                <!-- Name Card -->
                <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border-left: 4px solid #3498db; padding: 20px; margin-bottom: 16px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                    <div class="info-card-title" style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: #7f8c8d; margin-bottom: 6px; font-weight: 600;">Client Name</div>
                    <div class="info-card-value" style="font-size: 18px; color: #2c3e50; font-weight: 600;">{{ $data['name'] }}</div>
                </div>

                <!-- Email Card -->
                <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border-left: 4px solid #e74c3c; padding: 20px; margin-bottom: 16px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                    <div class="info-card-title" style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: #7f8c8d; margin-bottom: 6px; font-weight: 600;">Email Address</div>
                    <div class="info-card-value" style="font-size: 16px;">
                        <a href="mailto:{{ $data['email'] }}" style="color: #e74c3c; text-decoration: none; font-weight: 500; transition: opacity 0.3s;">{{ $data['email'] }}</a>
                    </div>
                </div>

                <!-- Subject Card -->
                <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border-left: 4px solid #f39c12; padding: 20px; margin-bottom: 16px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                    <div class="info-card-title" style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: #7f8c8d; margin-bottom: 6px; font-weight: 600;">Subject</div>
                    <div class="info-card-value" style="font-size: 16px; color: #2c3e50; font-weight: 500;">{{ $data['subject'] }}</div>
                </div>

            </div>

            <!-- Message Section with Marble Texture -->
            <div style="margin-top: 30px;">
                <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: #7f8c8d; margin-bottom: 12px; font-weight: 600;">
                    📝 Message Details
                </div>
                <div class="message-box" style="background: linear-gradient(135deg, #fdfefe 0%, #f8f9fa 100%); border: 2px solid #ecf0f1; border-radius: 10px; padding: 24px; position: relative; overflow: hidden; box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);">
                    <!-- Subtle Pattern -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.03; background-image: repeating-linear-gradient(90deg, transparent, transparent 2px, #2c3e50 2px, #2c3e50 4px); pointer-events: none;"></div>
                    
                    <div class="message-text" style="position: relative; z-index: 1; color: #34495e; font-size: 15px; line-height: 1.7; white-space: pre-wrap; word-wrap: break-word;">{{ $data['message'] }}</div>
                </div>
            </div>

            <!-- Service Icons Section -->
            <div class="services-section" style="margin-top: 35px; padding: 25px; background: linear-gradient(135deg, #ecf0f1 0%, #f8f9fa 100%); border-radius: 10px;">
                <div style="text-align: center; margin-bottom: 15px;">
                    <div style="font-size: 12px; color: #7f8c8d; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600;">Our Services</div>
                </div>
                <div style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 15px;">
                    <div class="service-item" style="text-align: center; flex: 1; min-width: 100px;">
                        <div class="service-icon" style="font-size: 28px; margin-bottom: 5px;">🎨</div>
                        <div style="font-size: 11px; color: #5d6d7e; font-weight: 500;">Paint</div>
                    </div>
                    <div class="service-item" style="text-align: center; flex: 1; min-width: 100px;">
                        <div class="service-icon" style="font-size: 28px; margin-bottom: 5px;">🖼️</div>
                        <div style="font-size: 11px; color: #5d6d7e; font-weight: 500;">Wallpaper</div>
                    </div>
                    <div class="service-item" style="text-align: center; flex: 1; min-width: 100px;">
                        <div class="service-icon" style="font-size: 28px; margin-bottom: 5px;">⚒️</div>
                        <div style="font-size: 11px; color: #5d6d7e; font-weight: 500;">Screeding</div>
                    </div>
                    <div class="service-item" style="text-align: center; flex: 1; min-width: 100px;">
                        <div class="service-icon" style="font-size: 28px; margin-bottom: 5px;">💎</div>
                        <div style="font-size: 11px; color: #5d6d7e; font-weight: 500;">Marble</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="footer" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); padding: 25px 30px; position: relative; overflow: hidden;">
            <!-- Decorative Pattern -->
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.05; background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,.1) 10px, rgba(255,255,255,.1) 20px); pointer-events: none;"></div>
            
            <div style="position: relative; z-index: 1; text-align: center;">
                <div style="color: #bdc3c7; font-size: 12px; line-height: 1.6;">
                    This inquiry was submitted through your website contact form
                </div>
                <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.1);">
                    <div style="color: #95a5a6; font-size: 11px;">
                        Transform your space with quality finishes
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>