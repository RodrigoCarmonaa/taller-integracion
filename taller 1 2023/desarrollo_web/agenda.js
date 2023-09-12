function agregarEvento() {
    const evento = document.getElementById("event").value;
    const fecha = document.getElementById("date").value;

    if (evento && fecha) {
        const eventoList = document.getElementById("eventos");
        const li = document.createElement("li");
        li.textContent = `${evento} - ${fecha}`;
        eventoList.appendChild(li);

        document.getElementById("event").value = "";
        document.getElementById("date").value = "";
    } else {
        alert("Por favor, complete ambos campos.");
    }
}
