a = "<tr> <td><input type='text' name = 'Compound' class='C' placeholder='Enter Compound' alt='Enter Compound' title='Enter Compound'></td>";
b = "<td><input type='text' name = 'Amount' class='W' placeholder='Enter Compound Weight' alt='Enter Compound Weight' title='Enter Compound Weight'></td></tr>";
d = a + b;

C = document.getElementsByClassName("C");
W = document.getElementsByClassName("W");

Composition = document.getElementById("Composition");
Composition.innerHTML = Composition.innerHTML + d;
function myfun(){
  c = "";
  Clen = C.length;
  for(i = 0; i < Clen; i++)
  {
    a = "<tr> <td><input type='text' class='C' placeholder='Enter Compound' alt='Enter Compound' title='Enter Compound' value='" +C[i].value+ "'></td>";
    b = "<td> <input type='text'n class='W' placeholder='Enter Compound Weight' alt='Enter Compound Weight' title='Enter Compound Weight' value='"+W[i].value+"'></td></tr>";
    c = c + a + b;
  }

  Composition.innerHTML = c + d;
}



function submit() {
  Clen = C.length;
  Compo = "";
  Amt = "";
  for(i = 0; i < Clen; i++)
  {
    Compo = Compo + C[i].value + "<br>";
    Amt = Amt + W[i].value + "<br>";
  }

  form = document.getElementsByClassName("form");
  form[0].value = document.getElementById("Product").value;
  form[1].value = document.getElementById("Pack").value;
  form[2].value = document.getElementById("Each").value;
  form[3].value = Compo;
  form[4].value = Amt;
  form[5].click();
}
