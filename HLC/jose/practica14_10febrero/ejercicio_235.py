# 235. Una matriz nula es aquella que solo contiene ceros. Construye una matriz nula de 5
# filas y 5 columnas.

matriz = []

# Rellenar matriz con ceros
for i in range(5):
    matriz.append([])
    for j in range(5):
        matriz[i].append(0)

print(matriz)