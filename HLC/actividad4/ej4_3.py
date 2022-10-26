def newLine():
    print('------------------------------------------')


# 3.- Pon en práctica los siguientes ejemplos e indica la salida:
# 3.1
a = 'cadena'
b = a[2:3]
c = b + ''
print(f'Salida 3.1 => {c}')

newLine()

# 3.2
print('Salida 3.2')
nombres = ['Juan', 'Antonia', 'Luis', 'Maria']
b = nombres
print(b)
print(len(b))

newLine()

# 3.3
a = [1, 1+1, 6/2]
print(f'Salida 3.3 => {a}')

newLine()

# 3.4
print(f'Salida 3.4 => {[1, 2] * 3}')

newLine()

# 3.5
a = [1, 2, 3]
b = [10, 20] + a * 2
print(f'Salida 3.5 => {b}')

newLine()

# 3.6
print(f'Salida 3.6 => {[1, 2, 3] == [1, 2]}')
