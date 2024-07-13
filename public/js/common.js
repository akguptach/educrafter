const setStatus = () => {
  const time = +/ \d{1,2}/gi
    .exec(
      new Date().toLocaleString("en-GB", {
        timeZone: "America/Indiana/Indianapolis"
      })
    )[0]
    .replace(" ", "");
  const isOnline = time >= 9 && time <= 17;

  document.querySelector(".footer_status .descriptor").innerHTML = isOnline
    ? "Online"
    : "Offline";
  document.querySelector(".footer_status-dot").style.backgroundColor = isOnline
    ? "#31f7c8"
    : "#FF0055";
};

document.addEventListener("DOMContentLoaded", () => {
  setInterval(() => setStatus(), 1000);
});
