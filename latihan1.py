import matplotlib.pyplot as plt
import numpy as np

# Membuat figure
fig = plt.figure(figsize=(10, 6))

# Data
tahun = [2015, 2016, 2017, 2018, 2019, 2020]
jumlah_lulusan = [175, 200, 150, 180, 160, 150]

# Create empty plots for legend
plt.plot([], [], color='blue', label='Kenaikan')
plt.plot([], [], color='red', label='Penurunan')

# Plot with different colors based on trend
plt.figure(figsize=(10, 6))
for i in range(len(tahun)-1):
    if jumlah_lulusan[i+1] > jumlah_lulusan[i]:
        plt.plot([tahun[i], tahun[i+1]], [jumlah_lulusan[i], jumlah_lulusan[i+1]], color='blue')
    else:
        plt.plot([tahun[i], tahun[i+1]], [jumlah_lulusan[i], jumlah_lulusan[i+1]], color='red')

plt.grid(True)
plt.xlabel('Tahun')
plt.ylabel('Jumlah Lulusan')
plt.title('Data Lulusan Prodi Sistem Informasi Unbin 2015-2020')
plt.legend()

# Menampilkan plot di PyScript
display(plt.gcf(), target="plot")
