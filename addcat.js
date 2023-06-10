var br = document.createElement("br");
document.getElementById("1").addEventListener("click", Ajouter);
// Hamza Khadim
function Ajouter() {


    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("id", "addcat");
    var id = Math.floor(Math.random() * 100)
    var CodCat = document.createElement("input");
    CodCat.setAttribute("type", "text");
    CodCat.setAttribute("name", "txt7");
    CodCat.setAttribute("value", id);
    CodCat.setAttribute('required', '');
    CodCat.setAttribute('class', 'txt7');
    var intitulé = document.createElement("input");
    intitulé.setAttribute("type", "text");
    intitulé.setAttribute("name", "txt8");
    intitulé.setAttribute("placeholder", "Intitulé");
    intitulé.setAttribute('required', '');
    intitulé.setAttribute('class', 'txt8');
    var domaine = document.createElement("input");
    domaine.setAttribute("type", "text");
    domaine.setAttribute("name", "txt9");
    domaine.setAttribute("placeholder", "Domaine");
    domaine.setAttribute('required', '');
    domaine.setAttribute('class', 'txt9');

    var s = document.createElement("input");
    s.setAttribute('id', 'confirm');
    s.setAttribute("type", "button");
    s.setAttribute("value", "Submit");
    s.setAttribute('onclick', 'Execute();' + onclick);
    form.appendChild(CodCat);
    form.appendChild(br.cloneNode());
    form.appendChild(intitulé);
    form.appendChild(br.cloneNode());
    form.appendChild(domaine);
    form.appendChild(br.cloneNode());
    form.appendChild(s);
    document.getElementsByTagName("body")[0].appendChild(form);
}


function Execute() {
    var txt7 = document.querySelector(".txt7").value;
    var txt8 = document.querySelector(".txt8").value;
    var txt9 = document.querySelector(".txt9").value;
    $.ajax({
            type: "POST",
            url: "add_cat.php",
            data: {
                "txt7": txt7,
                "txt8": txt8,
                "txt9": txt9
            },
        })
        .done(function(msg) {
            alert(msg);

        })
    for (let step = 0; step < 10; step++) {
        $('#catégorie').load('catégorie.php');
        $('#catégorie').load('catégorie.php');
        $('#catégorie').load('catégorie.php');
    }


    removeforn()

    function removeforn() {
        var form2 = document.getElementById("addcat");
        form2.parentNode.removeChild(form2);
    }
}