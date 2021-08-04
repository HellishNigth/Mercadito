const cargarFaltantes = async()=>{
    let ras = await axios.get("api/faltante/get");
    let faltante = ras.data;

    let faltantetSelect = document.querySelector("#faltante-select");
    faltante.forEach(f=>{
        let option = document.createElement("option");
        option.innerText = f;
        faltantetSelect.appendChild(option);
    });
};
cargarFaltantes();