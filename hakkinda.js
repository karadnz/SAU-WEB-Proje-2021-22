function bilgi (){

    const url="http://ergast.com/api/f1/current/constructorStandings.json";

    let json="";

    console.log("bilgi");

    fetch(url).then((response)=>{return response.json();}).then(

        (responseJson)=>{


            let ic="";

            console.log(responseJson);
            console.log(responseJson.MRData.StandingsTable.StandingsLists[0].ConstructorStandings[0].Constructor.name);
            console.log(responseJson.MRData.StandingsTable.StandingsLists[0].ConstructorStandings[0].Constructor.nationality);
            console.log(responseJson.MRData.StandingsTable.StandingsLists[0].ConstructorStandings[0].points);
            console.log(responseJson.MRData.StandingsTable.StandingsLists[0].ConstructorStandings[0].wins);


            ic=` 
            <h1 class="my-3">F1 2022 Sezonu</h1>
            <table class="table table-striped table-hover">

            <thead>
            
              <tr>
                <th scope="col">#</th>
                <th scope="col">Takım</th>
                <th scope="col">Uyruk</th>
                <th scope="col">Puan</th>
                <th scope="col">Kazanılan yarış</th>
              </tr>
            
            </thead>
            
            <tbody> `;

            let sira=1;
            for(let takim of responseJson.MRData.StandingsTable.StandingsLists[0].ConstructorStandings)
            {

                ic+=`   <tr>
                <th scope="row">${sira}</th>
                <td><a href="${takim.Constructor.url}" class="link-dark">${takim.Constructor.name}</a></td>
                <td>${takim.Constructor.nationality}</td>
                <td>${takim.points}</td>
                <td>${takim.wins}</td>
                </tr> `;

                sira++;

            }

            ic+=` </tbody>

            </table> `

            console.log(ic);

            document.getElementById("f1Kutu").innerHTML=ic;

            
        }

        )



}


//document.getElementById("f1Kutu").innerHTML= `<p>${responseJson.StandingsTable.StandingsList.ConstructorStandings[0].Constructor.constructorId}<p>`


{/* 

<table class="table table-striped">

<thead>

  <tr>
    <th scope="col">#</th>
    <th scope="col">Takım</th>
    <th scope="col">Ülke</th>
    <th scope="col">Puan</th>
    <th scope="col">Kazanılan yarış</th>
  </tr>

</thead>

<tbody>

  <tr>
    <th scope="row">1</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">2</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">3</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">4</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">5</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">6</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">7</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">8</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">9</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

  <tr>
    <th scope="row">10</th>
    <td>Ferrai</td>
    <td>İtalya</td>
    <td>100</td>
    <td>2</td>
  </tr>

</tbody>

</table> */}