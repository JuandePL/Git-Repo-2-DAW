# Estudia las diferencias entre el siguiente programa y el último que hemos estudiado.
# ¿Producen ambos el mismo resultado?

sumatorioUno = 0
i = 0
while i <= 1000:
    sumatorioUno += i
    i += 1

sumatorioDos = 0
i = 0
while i < 1000:
    i += 1
    sumatorioDos += i

print(f'El primer ejercicio da {sumatorioUno}')
print(f'El segundo ejercicio da {sumatorioDos}')
print('\nLos resultados son iguales porque el comparador en el bucle (<|<=) suma 1000 números.')