// https://data.covid19india.org/data.json
// alert('Hello');

const parentElement = document.querySelector('.renderData');

async function fetchData() {
  const res = await fetch('https://data.covid19india.org/data.json');
  const data = await res.json();
  render(data);
}
fetchData();

function render(data) {
  const statewise = data.statewise;

  statewise.forEach((state) => {
    const tr = document.createElement('tr');
    const td1 = document.createElement('td');
    const td2 = document.createElement('td');
    const td3 = document.createElement('td');
    const td4 = document.createElement('td');
    const td5 = document.createElement('td');
    const td6 = document.createElement('td');

    td1.innerHTML = state.state;
    td2.innerHTML = state.confirmed;
    td3.innerHTML = state.recovered;
    td4.innerHTML = state.active;
    td5.innerHTML = state.deaths;
    td6.innerHTML = state.lastupdatedtime;

    tr.append(td1, td2, td3, td4, td5, td6);
    parentElement.appendChild(tr);
  });
}
