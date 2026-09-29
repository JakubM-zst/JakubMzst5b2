<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function SUMA() {
        let a = parseInt(prompt("Podaj pierwszą liczbę całkowitą:"));
        let b = parseInt(prompt("Podaj drugą liczbę całkowitą:"));
    
        alert("Suma = " + (a + b));
    }
    
    function PODSTAWY() {
        let a = parseFloat(prompt("Podaj pierwszą liczbę:"));
        let b = parseFloat(prompt("Podaj drugą liczbę:"));
    
        alert(
            "Różnica = " + (a - b) +
            "Iloczyn = " + (a * b) +
            "Iloraz = " + (a / b)
        );
    }
    
    function KALKULATOR() {
        let a = parseFloat(prompt("Podaj pierwszą liczbę:"));
        let b = parseFloat(prompt("Podaj drugą liczbę:"));
        let dzialanie = prompt("Podaj działanie: suma, różnica, iloczyn lub iloraz");
    
        let wynik;
    
        switch (dzialanie.toLowerCase()) {
            case "suma":
                wynik = a + b;
                break;
    
            case "różnica":
            case "roznica":
                wynik = a - b;
                break;
    
            case "iloczyn":
                wynik = a * b;
                break;
    
            case "iloraz":
                wynik = a / b;
                break;
    
            default:
                wynik = "Nieprawidłowe działanie";
        }
    
        document.getElementById("wynik").innerHTML = wynik;
    }
    
    function MAKS() {
        let a = parseFloat(prompt("Podaj pierwszą liczbę:"));
        let b = parseFloat(prompt("Podaj drugą liczbę:"));
        let c = parseFloat(prompt("Podaj trzecią liczbę:"));
    
        alert("Największa liczba = " + Math.max(a, b, c));
    }
    
    function WZROST() {
        let wzrost = parseFloat(prompt("Podaj wzrost w cm:"));
    
        if (wzrost < 150) {
            alert("Niski");
        } else if (wzrost > 180) {
            alert("Wysoki");
        } else {
            alert("Średni");
        }
    }
    
    function BMI() {
        let wzrost = parseFloat(prompt("Podaj wzrost w cm:"));
        let waga = parseFloat(prompt("Podaj wagę w kg:"));
    
        let wzrostM = wzrost / 100;
        let bmi = waga / (wzrostM * wzrostM);
    
        let komentarz;
    
        if (bmi < 18.5) {
            komentarz = "za mało!";
        } else if (bmi > 25) {
            komentarz = "za dużo!";
        } else {
            komentarz = "OK!";
        }
    
        document.getElementById("wynik").innerHTML =
            "BMI: " + bmi.toFixed(2) + " - " + komentarz;
    }
    
    function STARSZY() {
        let data1 = prompt("Podaj datę urodzenia pierwszej osoby (RRRR-MM-DD):");
        let data2 = prompt("Podaj datę urodzenia drugiej osoby (RRRR-MM-DD):");
    
        let osoba1 = new Date(data1);
        let osoba2 = new Date(data2);
    
        if (osoba1 < osoba2) {
            alert("Pierwsza osoba jest starsza.");
        } else if (osoba2 < osoba1) {
            alert("Druga osoba jest starsza.");
        } else {
            alert("Osoby są w tym samym wieku.");
        }
    }
    
    function PRZESTEPNY(rok) {
        if ((rok % 400 === 0) || (rok % 4 === 0 && rok % 100 !== 0)) {
            alert("Rok " + rok + " jest przestępny.");
        } else {
            alert("Rok " + rok + " nie jest przestępny.");
        }
    }
    
    function SILA(haslo) {
        if (haslo.length <= 4) {
            alert("Hasło słabe");
            return;
        }
    
        if (haslo.length <= 8) {
            alert("Hasło średnie");
        } else {
            alert("Hasło mocne");
        }
    
        if (!/[0-9]/.test(haslo)) {
            alert("Brak cyfry - hasło słabe");
        }
    
        if (!/[A-Z]/.test(haslo)) {
            alert("Brak dużej litery - hasło słabe");
        }
    
        if (!/[a-z]/.test(haslo)) {
            alert("Brak małej litery - hasło słabe");
        }
    
        if (!/[^A-Za-z0-9]/.test(haslo)) {
            alert("Brak znaku specjalnego - hasło słabe");
        }
    }
    
    function TROJKAT() {
        let a = parseInt(prompt("Podaj pierwszy bok:"));
        let b = parseInt(prompt("Podaj drugi bok:"));
        let c = parseInt(prompt("Podaj trzeci bok:"));
    
        if (a + b > c && a + c > b && b + c > a) {
            alert("Z podanych boków można utworzyć trójkąt.");
        } else {
            alert("Z podanych boków nie można utworzyć trójkąta.");
        }
    }
    
    function SZYFR() {
        let pole = document.getElementById("tekst");
        let wynik = document.getElementById("zaszyfrowany");
    
        pole.addEventListener("input", function () {
            let tekst = pole.value;
            let szyfr = "";
    
            for (let i = 0; i < tekst.length; i++) {
                let znak = tekst[i];
    
                if (znak >= 'a' && znak <= 'z') {
                    szyfr += String.fromCharCode(
                        (znak.charCodeAt(0) - 97 + 2) % 26 + 97
                    );
                } else if (znak >= 'A' && znak <= 'Z') {
                    szyfr += String.fromCharCode(
                        (znak.charCodeAt(0) - 65 + 2) % 26 + 65
                    );
                } else {
                    szyfr += znak;
                }
            }
    
            wynik.innerHTML = szyfr;
        });
    }
    
    ?>
</body>
</html>