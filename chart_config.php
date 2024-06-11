<script>
    // Generar datos del gráfico usando PHP
    const labels = <?php echo json_encode($chartData['instruments']); ?>;
    const dataValues = <?php echo json_encode($chartData['prices']); ?>;

    const data = {
        labels: labels,
        datasets: [{
            label: 'Preus dels instruments',
            data: dataValues,
            fill: false,
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Chart Title',
                }
            }
        }
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    function alignTitle(alignment) {
        myChart.options.plugins.title.align = alignment;
        myChart.update();
    }
</script>
