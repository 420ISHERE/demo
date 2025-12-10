<div id="chatbot-container">
    <div id="chatbot-box" class="hidden">
        <div id="chatbot-header">
            <span>🙏 Hare Krishna Chatbot</span>
            <button id="close-chat">×</button>
        </div>
        <!-- Chat body is now populated by JavaScript -->
        <div id="chat-body"></div>
        <div id="chat-input">
            <input type="text" id="user-input" placeholder="Type your question..." />
            <button id="send-btn">Send</button>
        </div>
    </div>

    <div id="chatbot-btn">
        <img src="{{ asset('assets/images/whatsapp-icon.png') }}" alt="Chat" />
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
    /* ... (Your existing CSS styles go here, no changes needed) ... */
   #chatbot-container {
    position: fixed;
    bottom: 25px;
    left: 25px;
    z-index: 9999;
}

/* Floating Button */
#chatbot-btn img {
    width: 60px;
    height: 60px;
    cursor: pointer;
    transition: transform 0.3s;
}

#chatbot-btn img:hover {
    transform: scale(1.1);
}

/* Chat Box */
#chatbot-box {
    width: 320px;
    max-width: 90vw;
    height: 420px;
    max-height: 70vh;
    background: white;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: fixed;
    bottom: 90px;
    left: 25px;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

#chatbot-box.hidden {
    opacity: 0;
    pointer-events: none;
    transform: scale(0.9);
}

/* Header */
#chatbot-header {
    background: #128C7E;
    color: white;
    padding: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: bold;
    font-size: 15px;
}

#chatbot-header button {
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
}

/* Chat Body */
#chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
    font-size: 14px;
    background: #f5f5f5;
    display: flex;
    flex-direction: column;
}

/* Messages */
.bot-msg,
.user-msg {
    margin: 8px 0;
    padding: 10px;
    border-radius: 12px;
    max-width: 80%;
    word-wrap: break-word;
    white-space: pre-wrap;
}

.bot-msg {
    background: #e0f7fa;
    align-self: flex-start;
}

.user-msg {
    background: #dcf8c6;
    align-self: flex-end;
    margin-left: auto;
}

/* Input area */
#chat-input {
    display: flex;
    border-top: 1px solid #ddd;
}

#chat-input input {
    flex: 1;
    border: none;
    padding: 10px;
    outline: none;
    font-size: 15px;
}

#chat-input button {
    background: #128C7E;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    font-weight: 500;
}

/* ----------- MOBILE RESPONSIVE ----------- */

/* Small Phones (≤ 480px) */
@media (max-width: 480px) {
    #chatbot-container {
        bottom: 15px;
        left: 15px;
    }

    #chatbot-btn img {
        width: 55px;
        height: 55px;
    }

    #chatbot-box {
        width: 90%;
        left: 5%;
        bottom: 80px;
        height: 70vh;   /* Auto-adjust height for small screens */
        max-height: 75vh;
    }

    #chat-body {
        font-size: 13px;
    }

    #chat-input input {
        font-size: 14px;
    }
}

/* Medium Phones (≤ 768px) */
@media (max-width: 768px) {
    #chatbot-box {
        width: 85%;
        left: 7%;
        height: 75vh;
        bottom: 85px;
    }
}

</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const chatbotBtn = document.getElementById("chatbot-btn");
        const chatbotBox = document.getElementById("chatbot-box");
        const closeBtn = document.getElementById("close-chat");
        const sendBtn = document.getElementById("send-btn");
        const userInput = document.getElementById("user-input");
        const chatBody = document.getElementById("chat-body");

        // --- NEW: In-memory chat history ---
        let chatHistory = [];
        const CHAT_HISTORY_KEY = 'hkm_chat_history';

        // --- NEW: Function to save history to sessionStorage ---
        function saveHistory() {
            // sessionStorage clears when the tab is closed
            sessionStorage.setItem(CHAT_HISTORY_KEY, JSON.stringify(chatHistory));
        }

        // --- NEW: Function to load history from sessionStorage ---
        function loadHistory() {
            const savedHistory = sessionStorage.getItem(CHAT_HISTORY_KEY);
            if (savedHistory) {
                chatHistory = JSON.parse(savedHistory);
                // Clear chat body before loading
                chatBody.innerHTML = '';
                chatHistory.forEach(msg => {
                    const className = msg.role === 'bot' ? 'bot-msg' : 'user-msg';
                    appendMessage(className, msg.text, false); // false = don't save
                });
            } else {
                // Add the default welcome message if no history
                const welcomeMsg = "Hare Krishna! 🌼 How can I help you today?";
                appendMessage("bot-msg", welcomeMsg, false);
                // Add it to history so the bot knows
                chatHistory.push({
                    role: 'bot',
                    text: welcomeMsg
                });
                // Don't save this, let the user's first message trigger the save
            }
        }

        // ✅ Toggle open/close chatbot
        chatbotBtn.addEventListener("click", () => {
            chatbotBox.classList.toggle("hidden");
            if (!chatbotBox.classList.contains("hidden")) {
                userInput.focus(); // Focus input when opened
            }
        });

        // ✅ Close button works
        closeBtn.addEventListener("click", () => {
            chatbotBox.classList.add("hidden");
        });

        // ✅ Send message when clicking send or pressing Enter
        sendBtn.addEventListener("click", sendMessage);
        userInput.addEventListener("keypress", e => {
            if (e.key === "Enter") sendMessage();
        });

        // Updated to handle saving
        function appendMessage(className, text, shouldSave = true) {
            const msg = document.createElement("div");
            msg.className = className;
            msg.textContent = text;
            chatBody.appendChild(msg);
            chatBody.scrollTop = chatBody.scrollHeight;

            // --- NEW: Save history logic ---
            if (shouldSave) {
                const role = className === 'bot-msg' ? 'bot' : 'user';
                chatHistory.push({
                    role: role,
                    text: text
                });
                saveHistory();
            }
        }

        async function sendMessage() {
            const text = userInput.value.trim();
            if (!text) return;

            // 1. Append user message and save
            appendMessage("user-msg", text, true);
            userInput.value = "";

            // 2. Show typing indicator (don't save this to history)
            const loader = document.createElement("div");
            loader.className = "bot-msg";
            loader.textContent = "Typing...";
            chatBody.appendChild(loader);
            chatBody.scrollTop = chatBody.scrollHeight;

            try {
                // 3. Send message AND history to the backend
                const res = await fetch("/chatbot/message", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        message: text,
                        chatHistory: chatHistory.slice(0, -1)
                    })
                });

                const data = await res.json();
                loader.remove();

                // 4. Append bot reply and save
                appendMessage("bot-msg", data.reply || "Sorry, I didn't understand that.", true);

            } catch (err) {
                loader.remove();
                // 5. On error, remove the user's message from history and re-save
                chatHistory.pop();
                saveHistory();
                appendMessage("bot-msg", "Error connecting to chatbot 😔", false);
            }
        }

        // --- NEW: Load history on page load ---
        loadHistory();
    });
</script>