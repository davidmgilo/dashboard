// new Chart(context).Line(data)

//Total ventes per mes


$(document).ready(function () {
    var data = {
        labels: ['Gener', 'Febrer','Març'],
        datasets: [
            {
                data: [25,50,5]
            }
        ]
    }

    var context = document.querySelector('#graph').getContext('2d')

    new Chart(context,{
        type: "line",
        data: data,
    })
})

