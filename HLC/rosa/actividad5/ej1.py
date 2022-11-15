# 1.- Realizamos un programa que calcule la potencia de un
# número. El usuario escribe la base y escribe el exponente, y el
# programa debe devolver el resultado de la potencia.

print("Bienvenido al programa, aquí podrás calcular la potencia de un número.")
base = int(input("Introduce la base a calcular: "))
exponente = int(input("Ahora introduce el exponente: "))

print(f'\nLa potencia de {base} elevado a {exponente} ({base}^{exponente}) es igual a {pow(base, exponente)}')
