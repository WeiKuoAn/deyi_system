function setUpEvents(){

  let stringE = document.querySelector(".stringE");
  let givenE = document.querySelectorAll(".givenE");
  let stringL = document.querySelector(".stringL");
  let stringW = document.querySelector(".stringW");
  let stringF = document.querySelector(".stringF");
  let clear = document.querySelector(".btn-clear");
  let calculate = document.querySelector(".lumen-method");
  let stringN = document.querySelector(".stringN");

  givenE.forEach(function(givenE) {
    givenE.addEventListener('click', function(e) {
      let value = e.target.dataset.num;
      stringE.value = value;
    })
  });

  clear.addEventListener('click', function(e) {
    stringE.value = "";
    stringL.value = "";
    stringW.value = "";
    stringF.value = "";
    stringN.value = "";
  })

  calculate.addEventListener('click', function(e) {
    
    let newStringE = document.querySelector(".stringE").value;
    let newStringL = document.querySelector(".stringL").value;
    let newStringW = document.querySelector(".stringW").value;
    let newStringF = document.querySelector(".stringF").value;

    if (newStringE > 0 && newStringL > 0 && newStringW > 0 && newStringF > 0) {
      
      let newNumberE = parseFloat(newStringE);
      let newNumberL = parseFloat(newStringL);
      let newNumberW = parseFloat(newStringW);
      let newNumberF = parseFloat(newStringF);
      const numberU = 0.55;
      const numberM = 0.65;
      
      let numberN = newNumberE * (newNumberL * newNumberW) / (newNumberF * numberU * numberM);
      let stringNtoFixed = numberN.toFixed(2);
      stringN.value = stringNtoFixed;
      stringE.value = newNumberE;
      stringL.value = newNumberL;
      stringW.value = newNumberW;
      stringF.value = newNumberF;

      localStorage.setItem("stringN",stringNtoFixed);
      localStorage.setItem("stringE",newNumberE);
      localStorage.setItem("stringL",newNumberL);
      localStorage.setItem("stringW",newNumberW);
      localStorage.setItem("stringF",newNumberF);
      // location.reload();

    } else {
      // alert("請輸入正確數值！")
      Swal.fire("請輸入正確數值！")
    }

    e.preventDefault();
  })

  const saveN = localStorage.getItem("stringN");
  const saveE = localStorage.getItem("stringE");
  const saveL = localStorage.getItem("stringL");
  const saveW = localStorage.getItem("stringW");
  const saveF = localStorage.getItem("stringF");
  
  if (saveN != null && saveE != null && saveL != null && saveW != null && saveF != null) {
    stringN.value = `${saveN}`;
    stringE.value = `${saveE}`;
    stringL.value = `${saveL}`;
    stringW.value = `${saveW}`;
    stringF.value = `${saveF}`;
  }

}

window.onload = function(){

  setUpEvents();
  
};