
const cargarTipProduc = async()=>{
    let resultado = await axios.get("api/tipproduc/get");
    let tipproduc = resultado.data;

    let tipproducSelect = document.querySelector("#tipo_produc-select");
    tipproduc.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        tipproducSelect.appendChild(option);
    });
};

cargarTipProduc();