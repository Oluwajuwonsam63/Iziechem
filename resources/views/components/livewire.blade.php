<div class="chatbot-icon" id="chatbotToggle">💬</div>

<div class="chatbot-window" id="chatbotWindow">
  <div class="chatbot-header">
    AI Assistant
    <button id="escalateBtn" style="float:right; background:none; border:none; color:white; cursor:pointer;">👨‍💼</button>
  </div>
  <div class="chatbot-messages" id="chatMessages"></div>
  <div class="chatbot-input">
    <input type="text" id="userInput" placeholder="Type your message..." />
    <button id="sendBtn">Send</button>
  </div>
</div>

<style>
.chatbot-icon {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #DF9E42;
  color: white;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  cursor: pointer;
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  z-index: 9999;
}

.chatbot-window {
  position: fixed;
  bottom: 90px;
  right: 20px;
  width: 350px;
  height: 450px;
  background: white;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  display: none;
  flex-direction: column;
  overflow: hidden;
  z-index: 10000;
}

.chatbot-header {
  background-color: #DF9E42;
  color: white;
  padding: 10px;
  text-align: center;
  font-weight: bold;
}

.chatbot-messages {
  flex: 1;
  padding: 10px;
  overflow-y: auto;
  font-size: 14px;
  background: white;
}

.chatbot-input {
    display: flex;
    border: 2px solid #DF9E42;
    border-radius: 10px;
    margin: 20px;
}

.chatbot-input input {
  flex: 1;
  padding: 10px;
  border: none;
  outline: none;
}

.chatbot-input button {
  background-color: #DF9E42;
  border: none;
  color: white;
  padding: 0 15px;
  cursor: pointer;
}

.message.user { text-align: right; color: #333; }
.message.bot { text-align: left; color: #DF9E42; }

@media (max-width: 600px) {
  .chatbot-window {
    width: 90%;
    right: 5%;
    height: 80%;
  }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
const toggle = document.getElementById('chatbotToggle');
const windowEl = document.getElementById('chatbotWindow');
const messages = document.getElementById('chatMessages');
const input = document.getElementById('userInput');
const sendBtn = document.getElementById('sendBtn');
const escalateBtn = document.getElementById('escalateBtn');

toggle.addEventListener('click', () => {
  windowEl.style.display = windowEl.style.display === 'flex' ? 'none' : 'flex';
});

sendBtn.addEventListener('click', sendMessage);
input.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendMessage(); });

function appendMessage(content, sender) {
  const div = document.createElement('div');
  div.classList.add('message', sender);
  div.textContent = content;
  messages.appendChild(div);
  messages.scrollTop = messages.scrollHeight;
}

async function sendMessage() {
  const userText = input.value.trim();
  if (!userText) return;

  appendMessage(userText, 'user');
  input.value = '';

  appendMessage('Thinking...', 'bot');

  try {
    const res = await axios.post('/chatbot/message', { message: userText });
    messages.lastChild.textContent = res.data.reply;
  } catch (err) {
    messages.lastChild.textContent = 'Error connecting to server.';
  }
}

// Escalate to Human
escalateBtn.addEventListener('click', async () => {
  appendMessage('Connecting you to a human agent...', 'bot');

  try {
    const res = await axios.post('/chatbot/escalate', {
      message: 'User requested human support.'
    });
    appendMessage(res.data.message, 'bot');
  } catch (err) {
    appendMessage('Error escalating issue.', 'bot');
  }
});
</script>
