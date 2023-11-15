document.getElementById("nameForm").addEventListener("submit", function (e) {
    e.preventDefault();
    
    const nameInput = document.getElementById("nameInput").value;
    localStorage.setItem("sharedName", nameInput);

    window.location.href = "EXP1/index.html";
});
