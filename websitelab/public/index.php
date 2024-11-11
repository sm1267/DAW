<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prezentare Sala Fitness</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>GymDAW - Soluție de Management pentru Săli de Fitness </h1>
            <p> Bine ai venit la GymDAW! Aplicația noastră facilitează administrarea și monitorizarea activităților pentru sălile de fitness, oferind un sistem complet pentru gestionarea membrilor, rezervărilor și progresului personal.</p>
        </header>
        <section>
        <h2>Funcționalitățile Aplicației</h2>
        <ul>
            <li>Autentificare și înregistrare pentru utilizatori: membri, antrenori, și administratori.</li>
            <li>Gestionarea abonaților: adăugare, editare și vizualizare abonamente.</li>
            <li>Rezervări pentru clase de fitness și gestionarea locurilor disponibile.</li>
            <li>Urmărirea progresului utilizatorilor (greutate, procent grăsime corporală, etc.).</li>
            <li>Generarea rapoartelor și statisticilor pentru administratori.</li>
            <li>Formular de contact cu trimiterea automată de emailuri.</li>
            <li>Analiză de vizitatori și accesări ale paginilor.</li>
        </ul>
    </section>

    <section>
        <h2>Arhitectura Aplicației</h2>
        <p>GymFit este construit pe o arhitectură web clasica formată din:</p>
        <ul>
            <li><strong>Frontend</strong>: paginile web sunt create folosind HTML, CSS și JavaScript pentru interacțiune.</li>
            <li><strong>Backend</strong>: cod PHP pentru procesarea cererilor, autentificarea utilizatorilor și manipularea datelor.</li>
            <li><strong>Bază de date MySQL</strong>: stocarea informațiilor despre utilizatori, abonamente, clase și progres.</li>
        </ul>
    </section>

    <section>
        <h2>Descrierea Bazei de Date</h2>
        <p>Structura bazei de date este simplă și eficientă, folosind tabelele:</p>
        <ul>
            <li><strong>Utilizatori</strong>: conține informațiile de autentificare și rolurile fiecărui utilizator.</li>
            <li><strong>Abonamente</strong>: detalii despre abonamentele membrilor, precum tipul abonamentului, data expirării, etc.</li>
            <li><strong>Clase</strong>: include informații despre clasele de fitness, antrenori și locurile disponibile.</li>
            <li><strong>Progres</strong>: stochează înregistrările de progres pentru fiecare membru.</li>
        </ul>
        <p>Clasele și Relațiile:<br>

            Utilizator - are atribute precum ID, nume, email, parola, tip_utilizator.<br>
            Metode: login(), register(), logout().<br>
            Clasă - conține ID, nume, locuri_disponibile, data, ora.<br>
            Metode: addClass(), reserveClass(), viewClasses().<br>
            Abonament - include ID, tip, data_inceput, data_sfarsit.<br>
            Metode: addSubscription(), updateSubscription().<br>
        </p>
    </section>

    <section>
        <h2>Logica Implementării și Fluxuri de Utilizator</h2>
        <p>Flux de Autentificare:</p>
        <ul>
            <li>Utilizatorul accesează pagina de login, introduce email-ul și parola.</li>
            <li> Controllerul de autentificare apelează modelul Utilizator pentru a verifica existența și validitatea utilizatorului. </li>
            <li>Dacă este valid, se inițiază o sesiune și utilizatorul este redirecționat către dashboard-ul specific rolului său. </li>
        </ul> 

        <p>Flux de Rezervare a unei Clase:</p>
        <ul>
            <li>Utilizatorul autentificat accesează lista claselor disponibile.</li>
            <li>Selectează o clasă, iar controllerul de clase verifică locurile disponibile.</li>
            <li>Dacă există locuri disponibile, rezervarea este confirmată și actualizată în baza de date.</li>
            <li>Membrul primește o confirmare, iar locurile disponibile se actualizează automat.</li>
        </ul>
    </section>
    </div>
</body>
</html>


