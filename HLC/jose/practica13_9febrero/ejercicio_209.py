# ¿Sabrías decir que resultados se mostrarán al ejecutar estas sentencias?

op1=[1, 2] < [1, 2] # False
op2=[1, 2, 3] < [1, 2] # False
op3=[1, 1] < [1, 2] # True
op4=[1, 3] < [1, 2] # False
op5=[10, 20, 30] < [1, 2, 3] # False
op6=[10, 20, 3] < [1, 2, 3] # False
op7=[10, 2, 3] < [1, 2, 3] # False
op8=[1, 20, 30] < [1, 2, 3] # False
op9=[0, 2, 3] < [1, 2, 3] # True
op10=[1] < [2, 3] # True
op11=[1] < [1, 2] # True
op12=[1, 2] < [0] # False

# Imprimir valores
contador = 1
for i in [op1, op2, op3, op4, op5, op6, op7, op8, op9, op10, op11, op12]:
    print(f'op{contador}: {i}')
    contador+=1