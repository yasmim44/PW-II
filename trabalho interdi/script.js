// ==========================
// RELÓGIO
// ==========================

const clock = document.querySelector(".clock");

function updateClock(){

  if(clock){

    const now = new Date();

    let h = now.getHours();
    let m = now.getMinutes();
    let s = now.getSeconds();

    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    clock.innerHTML = `${h}:${m}:${s}`;

  }

}

setInterval(updateClock,1000);

// ==========================
// CHECKLIST
// ==========================

const tasks = document.querySelectorAll(".tasks li");

tasks.forEach(task => {

  task.addEventListener("click", () => {

    task.classList.toggle("completed");

    if(task.classList.contains("completed")){

      task.style.textDecoration = "line-through";
      task.style.opacity = "0.6";

    }else{

      task.style.textDecoration = "none";
      task.style.opacity = "1";

    }

  });

});

// ==========================
// CALENDÁRIO
// ==========================

const days = document.querySelectorAll(".calendar span");

days.forEach(day => {

  day.addEventListener("click", () => {

    days.forEach(remove => {

      remove.classList.remove("active-day");

    });

    day.classList.add("active-day");

  });

});

// ==========================
// SALVAR ANOTAÇÕES
// ==========================

const textarea = document.querySelector("textarea");

const saveBtn = document.querySelector(".save-btn");

if(saveBtn){

  saveBtn.addEventListener("click", () => {

    localStorage.setItem("devlife_notes", textarea.value);

    alert("Anotação salva!");

  });

}

window.onload = () => {

  if(textarea){

    textarea.value = localStorage.getItem("devlife_notes") || "";

  }

};

// ==========================
// DARK MODE
// ==========================

const darkBtn = document.querySelector(".dark-mode");

if(darkBtn){

  darkBtn.addEventListener("click", () => {

    document.body.classList.toggle("light-mode");

  });

}

// ==========================
// BOTÕES DA AGENDA
// ==========================

const completeButtons = document.querySelectorAll(".complete-btn");

completeButtons.forEach(button => {

  button.addEventListener("click", () => {

    const card = button.parentElement;

    card.classList.toggle("completed-card");

    if(button.innerHTML === "Concluir"){

      button.innerHTML = "Concluído ✅";

    }else{

      button.innerHTML = "Concluir";

    }

  });

});

// ==========================
// ANIMAÇÃO DOS CARDS
// ==========================

const cards = document.querySelectorAll(".card, .agenda-card");

cards.forEach(card => {

  card.addEventListener("mouseenter", () => {

    card.style.transform = "translateY(-8px)";

  });

  card.addEventListener("mouseleave", () => {

    card.style.transform = "translateY(0px)";

  });

});