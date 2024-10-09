function validateForm() {
    var age = document.getElementById('age').value;
    if (isNaN(age) || age <= 0) {
        alert('Please enter a valid age.');
        return false;
    }
    var contact = document.getElementById('contact').value;

    if (!/^\d{11}$/.test(contact)) {
        alert("Contact number must be exactly 11 digits.");
        return false;
    }
    return true;
}
