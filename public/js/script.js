const name = document.getElementById('name')
const email = document.getElementById('email')
const phone = document.getElementById('phone')
const place = document.getElementById('place')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value == null) {
        messages.push('Name is required')
    }

    if(phone.value.length<=10){
        messages.push('phone number must be longer than 10 characters')
    }
    
    if (messages.length > 0) {
        e.preventDefault()

        errorElement.innerText = messages.join(',')
        return false
    }
})