{{-- resources/views/components/chatbot.blade.php --}}
@auth
  @php $userName = Auth::user()->name; @endphp
@else
  @php $userName = 'Guest'; @endphp
@endauth

<div id="chatbot-root" data-message-url="{{ route('chatbot.message') }}" data-escalate-url="{{ route('chatbot.escalate') }}" data-csrf-token="{{ csrf_token() }}">
  <div id="chatbot-toggle" class="chatbot-icon" aria-label="Open chat"><i class="bi bi-chat"></i></div>

  <div id="chatbot-window" class="chatbot-window" role="dialog" aria-hidden="true">
    <div class="chatbot-header">
      <div>AI Assistant</div>
      <div>
        <button id="escalateBtn" class="chatbot-escalate" title="Escalate to human">👨‍💼</button>
        <button id="chatClose" class="chatbot-close" aria-label="Close">✕</button>
      </div>
    </div>

    <div id="chatbot-messages" class="chatbot-messages" aria-live="polite"></div>

    <form id="chatbot-form" class="chatbot-input" onsubmit="return false;">
      <input id="chatbot-input" type="text" placeholder="Type your message..." autocomplete="off" />
      <button id="chatbot-send" type="button"><i class="bi bi-send"></i></button>
    </form>
  </div>
</div>

<style>
/* Basic styles - copy into your main CSS if you prefer */
.chatbot-icon{
  position: fixed; bottom: 20px; right: 20px;
  background:#DF9E42; color:#fff; width:60px; height:60px;
  display:flex;align-items:center;justify-content:center;
  border-radius:30%; cursor:pointer; z-index:9999; box-shadow:0 6px 16px rgba(0,0,0,.18);
}
.chatbot-window{
  position: fixed; bottom: 90px; right: 20px;
  width: 360px; max-width: calc(100% - 40px); height: 520px;
  background: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,.12);
  display: none; flex-direction: column; overflow: hidden; z-index:10000;
}

.chatbot-header{ background:#DF9E42; color:#fff; padding:12px 14px; display:flex; justify-content:space-between; align-items:center; }
.chatbot-messages{ flex:1; padding:12px; overflow-y:auto; background:#f8f9fb; font-size:14px; }
.chatbot-input{ display:flex; border-top:1px solid #eee; padding:10px; gap:8px; }
.chatbot-input input{ flex:1; padding:10px; border:1px solid #ddd; border-radius:8px; outline:none; }
.chatbot-input button{ background:#DF9E42; color:#fff; padding:8px 12px; border-radius:8px; border:none; cursor:pointer; }
.message.user{ text-align:right; margin-bottom:8px; }
.message.user .bubble{ display:inline-block; background:#e9f2ff; padding:8px 10px; border-radius:10px; }
.message.bot{ text-align:left; margin-bottom:8px; }
.message.bot .bubble{ display:inline-block; background:#e9e9e9; padding:8px 10px; border-radius:10px; }
.chatbot-escalate{ background:none; border:none; color:#fff; font-size:18px; cursor:pointer; margin-right:8px; }
.chatbot-close{ background:none; border:none; color:#fff; font-size:18px; cursor:pointer; }
@media (max-width:600px){
  .chatbot-window{ width: 95%; right: 2.5%; bottom: 80px; height: 60%; }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
(function(){
  const toggle = document.getElementById('chatbot-toggle');
  const win = document.getElementById('chatbot-window');
  const closeBtn = document.getElementById('chatClose');
  const messages = document.getElementById('chatbot-messages');
  const input = document.getElementById('chatbot-input');
  const sendBtn = document.getElementById('chatbot-send');
  const escalateBtn = document.getElementById('escalateBtn');

  // CSRF and endpoint setup for axios
  axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
  const root = document.getElementById('chatbot-root');
  const messageUrl = root?.dataset?.messageUrl || '/chatbot/message';
  const escalateUrl = root?.dataset?.escalateUrl || '/chatbot/escalate';
  const csrfToken = root?.dataset?.csrfToken;
  if (csrfToken) axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;

  function openWindow(){ win.style.display = 'flex'; win.setAttribute('aria-hidden','false'); input.focus(); }
  function closeWindow(){ win.style.display = 'none'; win.setAttribute('aria-hidden','true'); }

  toggle.addEventListener('click', () => { if (win.style.display === 'flex') closeWindow(); else openWindow(); });
  closeBtn.addEventListener('click', closeWindow);

  function appendMessage(text, who='bot'){
    const wrapper = document.createElement('div');
    wrapper.className = 'message ' + (who === 'user' ? 'user' : 'bot');
    const bubble = document.createElement('div');
    bubble.className = 'bubble';
    bubble.textContent = text;
    wrapper.appendChild(bubble);
    messages.appendChild(wrapper);
    messages.scrollTop = messages.scrollHeight;
  }

  sendBtn.addEventListener('click', sendMessage);
  input.addEventListener('keypress', function(e){ if (e.key === 'Enter') sendMessage(); });

  async function sendMessage(){
    const text = input.value.trim();
    if (!text) return;
    appendMessage(text, 'user');
    input.value = '';
    appendMessage('Thinking...', 'bot');
    try {
  const res = await axios.post(messageUrl, { message: text });
      // replace the 'Thinking...' text with response
      const last = messages.querySelector('.message.bot:last-child .bubble');
      if (res.data && res.data.reply) last.textContent = res.data.reply;
      else last.textContent = 'No reply from AI.';
    } catch (err) {
      const last = messages.querySelector('.message.bot:last-child .bubble');
      // If server returned a response, prefer descriptive server message
      if (err.response) {
        // Rate-limited / quota exceeded
        if (err.response.status === 429) {
          last.textContent = err.response.data?.message || 'Rate limit exceeded. Please try again later.';
          // Suggest escalation to a human agent
          appendMessage('If this persists, click the human icon (👨‍💼) to escalate to support.', 'bot');
        } else {
          // Generic server-side error with descriptive message
          last.textContent = err.response.data?.message || err.response.data?.reply || ('Server error: ' + err.response.status);
        }
      } else {
        // Network-level error (no response)
        last.textContent = 'Network error: unable to reach server. Check your connection.';
      }
    }
  }

  // Escalation - creates a support ticket
  escalateBtn.addEventListener('click', async () => {
    appendMessage('Connecting you to a human agent...', 'bot');
    try {
  const res = await axios.post(escalateUrl, { message: 'User escalated from chatbot' });
      appendMessage(res.data.message, 'bot');
    } catch (err) {
      appendMessage('Could not create a support ticket.', 'bot');
    }
  });

})();
</script>
