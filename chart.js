var ctx = document.getElementById('myChart').getContext('2d');

fetch('http://localhost/LTE/ChartData.php')
    .then(response => response.json())
    .then(data => {
        var labels = [];
        var totalMasuk = [];
        var totalKeluar = [];

        data.forEach(item => {
            labels.push(item.label);
            totalMasuk.push(item.total_masuk);
            totalKeluar.push(item.total_keluar);
        });

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Masuk',
                    data: totalMasuk,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }, {
                    label: 'Total Keluar',
                    data: totalKeluar,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    title: {
                        font: {
                            size: 20
                        },
                        display: true,
                        text: "Monitoring Stok Barang"
                    },
                    subtitle: {
                        font: {
                            size: 14
                        },
                        display: true,
                        text: "PT SUPERTONE"
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
