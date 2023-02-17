# 265. Diseña una función que devuelva una lista con los números perfectos comprendidos
# entre 1 y n, siendo n un entero que nos proporciona el usuario

def listaNumerosPerfectos(n):
    lista = []

    # Bucle para crear la lista con la longitud pasada por parametro
    for i in range(1, n):
        if n % i == 0:
            lista.append(i)

    return lista            


n = int(input("Introduce el número tope: "))
print(listaNumerosPerfectos(n))