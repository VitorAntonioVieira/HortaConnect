document.addEventListener("DOMContentLoaded", function() {
    const inputQuestion = document.getElementById("inputQuestion");
    const result = document.getElementById("result");
    const searchButton = document.getElementById("searchButton");

    inputQuestion.addEventListener("keypress", function(e) {
        if (e.key === "Enter") {
            e.preventDefault(); // Impedir a submissão do formulário padrão
            sendQuestion();
        }
    });

    searchButton.addEventListener("click", function() {
        sendQuestion();
        console.log('oi')
    });

    const OPENAI_API_KEY = "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";

    function sendQuestion() {
        var sQuestion = inputQuestion.value;

        fetch("https://api.openai.com/v1/completions", {
            method: "POST",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json",
                Authorization: "Bearer " + OPENAI_API_KEY,
            },
            body: JSON.stringify({
                prompt: sQuestion,
                max_tokens: 2048, // tamanho da resposta
                temperature: 0.5, // criatividade na resposta
            }),
        })
        .then(response => response.json())
        .then(json => {
            if (result.value) result.value += "\n";

            if (json.error?.message) {
                result.value += `Error: ${json.error.message}`;
            } else if (json.choices?.[0].text) {
                var text = json.choices[0].text || "Sem resposta";

                result.value += "Chat GPT: " + text;
            }

            result.scrollTop = result.scrollHeight;
        })
        .catch(error => console.error("Error:", error))
        .finally(() => {
            inputQuestion.value = "";
            inputQuestion.disabled = false;
            inputQuestion.focus();
        });

        if (result.value) result.value += "\n\n\n";

        result.value += `Eu: ${sQuestion}`;
        inputQuestion.value = "Carregando...";
        inputQuestion.disabled = true;

        result.scrollTop = result.scrollHeight;
    }
});
