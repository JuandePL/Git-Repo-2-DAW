# 224. Diseña un programa que elimine de una lista todos los elementos de índice par y
# muestre por pantalla el resultado.
# (Ejemplo: si trabaja con la lista [1, 2, 1, 5, 0, 3], esta pasará a ser [2, 5, 3])

lista = [1, 2, 1, 5, 0, 3]

# FIltrar los numeros con indice impar
listaIndiceImpar = list(filter(lambda i: lista.index(i) % 2 != 0, lista))
print(f'Lista inicial: {lista}')
print(f'Lista filtrada: {listaIndiceImpar}')