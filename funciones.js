const printInputs= (ev)=>{
    console.log(ev.target.value)
    $$span=document.querySelector("span");
  
    const $$form = document.querySelector("#form");
    if ($$span){$$form.removeChild($$span)}
    const $$newInput = document.createElement("span");
    if (ev.target.value === "circulo"){
       
        $$newInput.innerHTML=`
        Medida del radio
        <input type='number' step='any' name='radio'>
        <select name='unidad'>
        <option>Unidad</option>
        <option value='m'>m</option>
        <option value='dm'>dm</option>
        <option value='cm'>cm</option>
        <option value='mm'>mm</option>
        </select>
        <br>
        <input type='submit' value='Enviar'>
        </form>
    `;
    }
    else if(ev.target.value === "cuadrado"){
        $$newInput.innerHTML=`
        Medida del lado
        <input type='number' step='any' name='lado'>
        <select name='unidad'>
        <option>Unidad</option>
        <option value='m'>m</option>
        <option value='dm'>dm</option>
        <option value='cm'>cm</option>
        <option value='mm'>mm</option>
        </select>
        <br>
        <input type='submit' value='Enviar'>
        </form>
    `;
    }
    else if(ev.target.value === "rectangulo"){
        $$newInput.innerHTML=`
        Medida de la base
        <input type='number' step='any' name='base'>
        <br>
        Medida de la altura
        <input type='number' step='any' name='altura'>
        <select name='unidad'>
        <option>Unidad</option>
        <option value='m'>m</option>
        <option value='dm'>dm</option>
        <option value='cm'>cm</option>
        <option value='mm'>mm</option>
        </select>
        <br>
        <input type='submit' value='Enviar'>
        </form>`;
    }
    else if((ev.target.value === "triangulo") || 
            (ev.target.value === "rombo")){

        if(ev.target.value=== "rombo"){
            param1="Diagonal 1";
            param2="Diagonal 2";
        }
        if(ev.target.value=== "triangulo"){
            param1="Base";
            param2="Altura";
        }
        $$newInput.innerHTML=`
        Medida de la ${param1}
        <input type='number' step='any' name='base'>
        <br>
        Medida de la ${param2}
        <input type='number' step='any' name='altura'>
        <select name='unidad'>
        <option>Unidad</option>
        <option value='m'>m</option>
        <option value='dm'>dm</option>
        <option value='cm'>cm</option>
        <option value='mm'>mm</option>
        </select>
        <br>
        <input type='submit' value='Enviar'>
        </form>`;
    }
    $$form.append($$newInput);
    }
    
    