import events from "./events.json";

async function loadNavTemplate() {
  const [responseHeaderNav, responseFooterNav] = await Promise.all([
    fetch("assets/nav/header.html"),
    fetch("assets/nav/footer.html"),
  ]);

  const headerNavTemplate = await responseHeaderNav.text();
  const footerNavTemplate = await responseFooterNav.text();

  document.getElementById("main-nav").innerHTML = headerNavTemplate;
  document.getElementById("footer-nav").innerHTML = footerNavTemplate;
}
loadNavTemplate();
// Beispiel-Daten für Events mit zusätzlichen Informationen

// Die Eventliste und Tabs laden
const eventListContainer = document.querySelector(".event-list");
const dateTabs = document.querySelectorAll(".date-tab");

// Funktion zum Rendern der Events als Karten
function renderEvents(selectedDate) {
  // Filtere die Events basierend auf dem ausgewählten Datum
  const filteredEvents = events[selectedDate];

  // Die Eventliste leeren
  eventListContainer.innerHTML = "";

  // Eventkarten hinzufügen oder "Keine Events"
  if (filteredEvents.length > 0) {
    filteredEvents.forEach((event) => {
      const eventCard = document.createElement("div");
      eventCard.classList.add("event-card");

      // Header mit Kategorie-Chip und Titel
      const header = document.createElement("div");
      header.classList.add("event-card-header");

      const categoryChip = document.createElement("span");
      categoryChip.classList.add(
        "category-chip",
        `category-${event.category.toLowerCase()}`
      );
      categoryChip.textContent =
        event.category.charAt(0).toUpperCase() + event.category.slice(1);
      header.appendChild(categoryChip);

      const eventTitle = document.createElement("h3");
      eventTitle.textContent = event.title;
      const eventTime = document.createElement("span");
      eventTime.textContent = event.time;
      eventTitle.appendChild(eventTime);
      header.appendChild(eventTitle);
      eventCard.appendChild(header);

      // Event-Infos
      const eventInfo = document.createElement("div");
      eventInfo.classList.add("event-info");
      let temp = `
                <p>Veranstalter: <a href="${event.website}" target="_blank">${event.organizer}</a></p>
                <p>Format: ${event.format}</p>
            `;
      if (event.location !== "Online") {
        temp += `<p>Ort: ${event.location}`;
        if (event.loginLink) {
          temp += ` [<a href="${event.loginLink}" target="_blank">Anmeldung</a>]`;
        }
        temp += `</p><p>Barrierefreiheit: ${
          event.accessibility ? "Ja" : "Nein"
        }</p>`;
      } else {
        temp += `<p>Ort: Online`;
        if (event.loginLink) {
          temp += ` [<a href="${event.loginLink}" target="_blank">Anmeldung</a>]`;
        }
        if (event.meetingLink) {
          temp += ` [<a href=${event.meetingLink}" target="_blank">Zoom</a>]`;
        }
        if (event.loginInstruction) {
          temp += ` ${event.loginInstruction}`;
        }
        temp += "</p>";
      }
      eventInfo.innerHTML = temp;
      eventCard.appendChild(eventInfo);

      // Kurzbeschreibung
      const eventDescriptionShort = document.createElement("p");
      eventDescriptionShort.textContent = event.shortDesc;
      eventDescriptionShort.classList.add("event-short-description");
      eventCard.appendChild(eventDescriptionShort);

      // Lange Beschreibung (standardmäßig versteckt)
      const eventDescriptionLong = document.createElement("p");
      eventDescriptionLong.classList.add("event-description");
      eventDescriptionLong.textContent = event.longDesc;
      eventCard.appendChild(eventDescriptionLong);

      // Toggle-Button für die lange Beschreibung
      const toggleIcon = document.createElement("div");
      toggleIcon.classList.add("toggle-icon");
      toggleIcon.innerHTML = `
                <svg viewBox="0 0 24 24" width="40" height="40">
                    <path fill="black" d="M12 16.5L6.75 11.25L8.16 9.84L12 13.67L15.84 9.84L17.25 11.25L12 16.5Z"/>
                </svg>`;
      toggleIcon.addEventListener("click", () => {
        eventCard.classList.toggle("expanded");
      });
      eventCard.appendChild(toggleIcon);

      eventListContainer.appendChild(eventCard);
    });
  } else {
    eventListContainer.textContent = "Keine Events für dieses Datum.";
  }
}

// Tabs-Click-Handler für das Aktivieren und Updaten
dateTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    // Entferne die Klasse 'active' von allen Tabs
    dateTabs.forEach((t) => t.classList.remove("active"));

    // Füge die 'active'-Klasse zum geklickten Tab hinzu
    tab.classList.add("active");

    // Rufe renderEvents mit dem Datum des geklickten Tabs auf
    const selectedDate = tab.getAttribute("data-date");
    renderEvents(selectedDate);
  });
});

// Initiales Rendern
dateTabs[0].click(); // Der erste Tab ist standardmäßig ausgewählt
