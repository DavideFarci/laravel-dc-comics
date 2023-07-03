let btnDelete = document.querySelectorAll(".hard_delete");

// btnDelete.addEventListener("click", function () {
//     // const deleteCard = !deleteCard;
//     // alert("Sei sicuro di voler eliminare l'immagine?");
//     console.log("hai cliccato elimina");
// });

btnDelete.forEach(function (btn) {
    btn.addEventListener("click", function () {
        if (confirm("Sei sicuro di voler eliminare la card?")) {
            // Il codice qui viene eseguito se l'utente conferma l'eliminazione
            console.log("hai cliccato elimina");
            // Effettua l'eliminazione dell'elemento
            // ...
        } else {
            // Il codice qui viene eseguito se l'utente annulla l'eliminazione
            console.log("eliminazione annullata");
            event.preventDefault();
        }
    });
});
