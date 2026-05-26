
    function updateClock() {
      const now = new Date();

      const time = now.toLocaleTimeString('id-ID', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
      });

      const date = now.toLocaleDateString('id-ID', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'
      });

      document.getElementById('clock').innerText = time;
      document.getElementById('date').innerText = date;
    }

    setInterval(updateClock, 1000);
    updateClock();

    const ctx = document.getElementById('apbdChart');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
        datasets: [{
          label: 'Progress Realisasi APBD',
          data: [12, 20, 32, 45, 58, 64, 72],
          borderWidth: 4,
          tension: 0.4,
          fill: true,
          backgroundColor: 'rgba(255,255,255,0.12)',
          borderColor: '#ffffff',
          pointBackgroundColor: '#ffffff',
          pointRadius: 5
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            labels: {
              color: '#ffffff'
            }
          }
        },
        scales: {
          x: {
            ticks: {
              color: '#ffffff'
            },
            grid: {
              color: 'rgba(255,255,255,0.08)'
            }
          },
          y: {
            ticks: {
              color: '#ffffff'
            },
            grid: {
              color: 'rgba(255,255,255,0.08)'
            }
          }
        }
      }
    });

    