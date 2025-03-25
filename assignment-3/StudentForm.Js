function submitForm() {
    const nim = document.getElementById("nim").value;
    const name = document.getElementById("name").value;
    const gender = document.getElementById("gender").value;
    const religion = document.getElementById("religion").value;
    const status = document.getElementById("status").value;
    const major = document.getElementById("major").value;
    const comments = document.getElementById("comments").value;

    document.getElementById("output").innerHTML = `
        <p><strong>NIM:</strong> ${nim}</p>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Gender:</strong> ${gender}</p>
        <p><strong>Religion:</strong> ${religion}</p>
        <p><strong>Status:</strong> ${status}</p>
        <p><strong>Major:</strong> ${major}</p>
        <p><strong>Comments:</strong> ${comments}</p>
    `;
}
