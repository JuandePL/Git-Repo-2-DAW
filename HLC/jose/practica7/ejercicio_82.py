# Diseña un programa que, dados cinco puntos en el plano, determine cuál de los
# cuatro últimos puntos es más cercano al primero. Un punto se representará con dos variables:
# una para la abcisa y otra para la ordenada.
# La distancia entre dos puntos (x1, y1) y (x2, y2) es √((x1 - x2)2 + (y1 - y2)2).

from math import sqrt


xList = []
yList = []
distanciaList = []
menorDistancia = 0

for i in range(5):
    x = int(input(f'Introduce x{i+1}: '))
    y = int(input(f'Introduce y{i+1}: '))
    xList.append(x)
    yList.append(y)

    # Calcular distancia
    if i != 0:
        distancia = round(sqrt((xList[0] - xList[i])**2 + (yList[0] - yList[i])**2), 2)
        distanciaList.append(distancia)

        # Calcular/inicializar menor distancia
        if menorDistancia > distancia or i == 1:
            menorDistancia = distancia

print(f'x: {xList}')
print(f'y: {yList}')
print(f'distancia: {distanciaList}')
print(f'Menor distancia: {menorDistancia}')
