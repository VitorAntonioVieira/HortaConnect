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
        model: "gpt-3.5-turbo-instruct", // Remova o espaço em branco antes do identificador do modelo
        prompt: sQuestion,
        max_tokens: 2048, // tamanho da resposta
        temperature: 0.5, // criatividade na resposta
    }),
})

        
        .then(response => response.json())
        .then(json => {
            if (json.error?.message) {
                result.value = `Error: ${json.error.message}`;
            } else if (json.choices?.[0].text) {
                result.value = "Chat GPT: " + json.choices[0].text;
            }
        })
        .catch(error => {
            console.error("Error:", error);
            result.value = "Ocorreu um erro ao processar sua pergunta.";
        })
        .finally(() => {
            inputQuestion.value = "";
            inputQuestion.disabled = false;
            inputQuestion.focus();
        });

        result.value = "Carregando...";
        inputQuestion.disabled = true;
    }
});