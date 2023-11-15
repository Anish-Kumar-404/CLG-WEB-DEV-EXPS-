document.getElementById("submitButton").addEventListener("click", function () {
    const experimentInput = parseInt(document.getElementById("experimentInput").value);

    if (experimentInput >= 1 && experimentInput <= 8) {
        let destinationUrl;

        switch (experimentInput) {
            case 1:
                destinationUrl = "https://simple-article-site-using-only-html.vercel.app/index.html";
                break;
            case 2:
                destinationUrl = "https://wc-indian-squad-2023.vercel.app/";
                break;
            case 3:
                destinationUrl = "EXP3/index.html";
                break;
            case 4:
                destinationUrl = "https://anish-kumar-portfolio.vercel.app/";
                break;
            case 5:
                destinationUrl = "EXP5/index.html";
                break;
            case 6:
                destinationUrl = "EXP6/index.html";
                break;
            case 7:
                destinationUrl = "EXP7/index.html";
                break;
            case 8:
                destinationUrl = "EXP8/index.html";
                break;
        }

        window.location.href = destinationUrl;
    } else {
        document.getElementById("errorContainer").innerText = "Please input a valid number between 1 and 8.";
    }
});
