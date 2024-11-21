document.getElementById('chat-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const chatInput = document.getElementById('chat-input');
    const chatBox = document.getElementById('chat-box');
    const userMessage = chatInput.value;

    // Tampilkan pesan pengguna
    const userMessageHtml = `<div class="user-message"><strong>Anda:</strong> ${userMessage}</div>`;
    chatBox.innerHTML += userMessageHtml;

    // Reset input
    chatInput.value = '';

    // Kirim pesan ke server
    try {
        const response = await fetch('/chat', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({ message: userMessage }),
        });

        const data = await response.json();

        // Tampilkan balasan
        const botReplyHtml = `<div class="bot-reply"><strong>Bot:</strong> ${data.reply}</div>`;
        chatBox.innerHTML += botReplyHtml;

        // Scroll otomatis ke bawah
        chatBox.scrollTop = chatBox.scrollHeight;
    } catch (error) {
        console.error('Error:', error);
    }
});
