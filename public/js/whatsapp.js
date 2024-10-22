// Función para cargar contactos
function loadContacts() {
    fetch('http://181.115.184.92/wppmoxos/get-contacts')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const contactList = document.getElementById('contact-list');
                contactList.innerHTML = ''; // Limpiar lista de contactos
                data.contacts.forEach(contact => {
                    const contactItem = document.createElement('li');
                    contactItem.classList.add('contact-item');
                    contactItem.innerHTML = `
                        <img src="${contact.profilePicUrl}" alt="Foto de perfil" class="contact-pic">
                        <div class="contact-info">
                            <span class="contact-name">${contact.name}</span><br>
                            <span class="contact-number">${contact.number}</span>
                        </div>
                    `;
                    contactList.appendChild(contactItem);
                });
            }
        })
        .catch(err => {
            console.error('Error al cargar los contactos:', err);
        });
}

// Llamar la función cuando cargue la página
window.onload = () => {
    checkAuthentication();
    loadContacts();
};

//Función para seleccionar un contacto y mostrar la conversación
function selectContact(contactNumber) {
    document.querySelector('.chat-header span').textContent = `${contactNumber}`;
    document.querySelector('#send-button').onclick = () => sendMessage(contactNumber);
}

document.addEventListener('click', function(event) {
    if (event.target.classList.contains('message')) {
        const messageContent = event.target.innerText; // El contenido del mensaje
        document.getElementById('selected-message').innerText = messageContent; // Mostrar el mensaje seleccionado
        document.getElementById('reply-box').style.display = 'block'; // Mostrar el cuadro de respuesta
    }
});

document.getElementById('send-button').addEventListener('click', function() {
    const message = document.getElementById('message-input').value;
    const selectedMessage = document.getElementById('selected-message').innerText; // Mensaje que se está respondiendo
    
    if (message !== '') {
        const data = {
            message: message,
            replyTo: selectedMessage // Incluir el mensaje seleccionado
        };

        // Llamar al backend para enviar el mensaje y la respuesta
        fetch('http://181.115.184.92/wppmoxos/reply-message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(response => response.json())
          .then(data => {
              console.log('Mensaje enviado:', data);
              // Limpiar la caja de texto y ocultar la caja de respuesta
              document.getElementById('message-input').value = '';
              document.getElementById('reply-box').style.display = 'none';
          }).catch(error => {
              console.error('Error:', error);
          });
    }
});

// Enviar mensaje
function sendMessage(contactNumber) {
    const message = document.querySelector('#message-input').value;

    fetch('http://181.115.184.92/wppmoxos/send-message', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            number: contactNumber,
            message: message
        })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Mensaje enviado:', data.response);
                // Mostrar el mensaje en el chat
                document.querySelector('#messages').innerHTML += `
                    <div class="message sent">${message}</div>
                `;
                document.querySelector('#message-input').value = ''; // Limpiar el input
            } else {
                console.error('Error al enviar el mensaje:', data.message);
            }
        })
        .catch(err => {
            console.error('Error al conectar con el servidor:', err);
        });
}

// Cargar contactos cuando se carga la página
window.onload = () => {
    loadContacts();
};



const socket = io('http://181.115.184.92/wppmoxos', {
    transports: ['polling', 'websocket']
});

socket.on('newMessage', function(data) {
    const messagesDiv = document.getElementById('messages');

    // Crear la estructura del mensaje básico
    let messageHtml = `
        <div class="message received">
            <span class="received">
                <b>${data.from}</b> <br>
                ${data.body || ''}
            </span>
            <span class="message-time">
                ${new Date(data.time * 1000).toLocaleTimeString()}
            </span>
        </div>
    `;

    // Si el mensaje tiene un medio (imagen, video, audio)
    if (data.media) {
        if (data.mediaType === 'image') {
            messageHtml += `
                <div class="media">
                    <img src="${data.media}" alt="Imagen recibida" width="200">
                </div>
            `;
        } else if (data.mediaType === 'video') {
            messageHtml += `
                <div class="media">
                    <video width="320" height="240" controls>
                        <source src="${data.media}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
            `;
        } else if (data.mediaType === 'audio') {
            messageHtml += `
                <div class="media">
                    <audio controls>
                        <source src="${data.media}" type="audio/mp3">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
            `;
        }
    }

    // Insertar el nuevo mensaje en el chat
    messagesDiv.innerHTML += messageHtml;
});