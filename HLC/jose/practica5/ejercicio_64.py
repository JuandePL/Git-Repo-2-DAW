# 64. Diseña un programa que, dado un número entero, determine si este es el doble de un
# número impar. (Ejemplo: 14 es el doble de 7, que es impar).

numero = int(input("Bienvenido al programa, introduzca un numero entero: "))

# Si el numero no es impar
mitad = numero // 2
if (mitad % 2 != 0):
    print(f"{numero} es el doble del {mitad}, que es impar")
else:
    print(f"{numero} no es el doble de un numero impar")