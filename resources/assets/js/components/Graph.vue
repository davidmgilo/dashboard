<template>
    <canvas id="graph"></canvas>
</template>

<script>
    import Chart from 'chart.js'
    export default {
        mounted() {
            console.log('Component mounted.')
            var data = {
             labels: ['Gener', 'Febrer','Març'],
             datasets: [
                 {
                     label: 'Samarretes',
                     data: [25,50,5]
                 },
                 {
                     label: 'Calçotets',
                     data: [50,85,43]
                 }
             ]
            }

            var context = document.querySelector('#graph').getContext('2d')

            new Chart(context,{
             type: "bar",
             data: data,
            })
        }
    }
</script>
