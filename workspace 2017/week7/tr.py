from sklearn import datasets
import numpy as np
import matplotlib.pyplot as plt
digits=datasets.load_digits()

# print (digits.images[0])

X_train=digits.data[0:10]
Y_train=digits.target[0:10]


var=345
X_test=digits.data[var]

def dist(x,y):
    return np.sqrt(np.sum((x-y)**2))

num=len(X_train)
distance=np.zeros(num)
for i in range(num):
    distance[i] = dist(X_train[i], X_test)
min_index = np.argmin(distance)
print(Y_train[min_index])


plt.figure()
plt.imshow(digits.images[var], cmap=plt.cm.gray_r, interpolation='nearest')
plt.show()


