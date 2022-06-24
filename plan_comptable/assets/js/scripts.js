let i=1;

function select_devise(){
    var opt="";
        for (var i = 0; i < deviseL.length; i++) {
            opt=opt+"<option value='"+deviseL[i].id+"'>"+deviseL[i].nom+"</option>";
        }
    return opt;
}
function addrow(id) {

    // var add = document.getElementById('details').innerHTML;

    // document.getElementById('details').innerHTML += add;

    i++;
    
    var compteF="<td class='w-10x'><input id='"+i+"' list='cmp' name='compte[]' id='compte' placeholder='compte' type='text' class='form-control' ></td>"
    var tiersF="<td class='w-10x'><input id='"+i+"' list='tiers' name='tiers[] id='tiers' placeholder='tiers' type='text' class='form-control' ></td>"
    var deviseF="<td class='w-10x'><select id='"+i+"' class='form-select' style='padding-right: 0px' name='devise[]'>"+select_devise()+"</select></td>";
    var tauxF="<input id='"+i+"' type='number' min='0'  step='any' name='taux[]' class='form-control' placeholder='taux de change'>";
    var quantiteF="<input id='"+i+"' type='number' min='0' step='any' name='q[]' class='form-control' placeholder='quantité'>";
    var montantF="<td class='w-10x'>"+tauxF+quantiteF+"</td>";
    var debitF="<td class='w-10x'><input id='"+i+"' step='any' type='number' min='0' name='debit[]' onkeyup='load_sumD()' onclick='fill_devise(this)' class='form-control' placeholder='débit'></td>";
    var creditF="<td class='w-10x'><input id='"+i+"' step='any' type='number' min='0' name='credit[]' onkeyup='load_sumC()' onclick='fill_devise(this)' class='form-control' placeholder='crédit'></td>";
    
    $('#'+id).append('<tr>'+compteF+tiersF+deviseF+montantF+debitF+creditF+'</tr>');
}


    function sumDebit() {

        var debitF = document.getElementsByName('debit[]');
        var sumD = 0;
        for (var i = 0; i < debitF.length; i++) {
            var a = debitF[i];
            if (a.value == "")
                continue
            sumD = parseFloat(sumD) + parseFloat(a.value);
        }
        return sumD;
    }

    function sumCredit() {

        var creditF = document.getElementsByName('credit[]');
        var sumC = 0;
        for (var i = 0; i < creditF.length; i++) {
            var a = creditF[i];
            if (a.value == "")
                continue
            sumC = parseFloat(sumC) + parseFloat(a.value);
        }
        return sumC;
    }

    function balance() {
        var debitF = document.getElementsByName('debit[]');
        var creditF = document.getElementsByName('credit[]');
        var sumD = sumDebit();
        var sumC = sumCredit();

        var sum = sumD - sumC;
        if (sum > 0) {
            creditF[creditF.length - 1].value = sum;
        } else if (sum < 0) {
            debitF[debitF.length - 1].value = -sum;
        }
        load_sumD();
        load_sumC();

    }

    function check_balance() {
        var sumD = sumDebit();
        var sumC = sumCredit();

        var sum = sumD - sumC;
        if (sum > 0) {
            alert("Ecriture non équilibrée: débit en success de " + sum + " Ar");
            return false;
        } else if (sum < 0) {
            alert("Ecriture non équilibrée: crédit en success de " + (-sum) + " Ar");
            return false;
        }


    }

    function load_sumD() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("sum_d").innerHTML = sumDebit();
        }

        xhttp.open("GET", "", true);
        xhttp.send();
    }

    function load_sumC() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("sum_c").innerHTML = sumCredit();
        }

        xhttp.open("GET", "", true);
        xhttp.send();
    }

    function fill_devise(input) {

        var id = parseInt(input.id);
        
        var tauxF = document.getElementsByName('taux[]');
        var qF = document.getElementsByName('q[]');

        var t=tauxF[id-1];
        var q=qF[id-1];

        if(t.value!="" && q.value!="")
            input.value=t.value*q.value;

        load_sumC();
        load_sumD();
        
    }