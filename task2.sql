-- 1. Напишите запрос для вывода списка сотрудников, у которых заработная плата выше, чем у руководителя.
SELECT * FROM Employees as employees, Employees AS chieves
WHERE chieves.EmployeeId = employees.ChiefId AND employees.Salary > chieves.Salary;

-- 2. Напишите запрос для вывода списка названий отделов, где количество сотрудников не превышает 3-х человек
SELECT Department FROM Employees GROUP BY department HAVING COUNT(employeeid)<4

-- 3. Определите форму нормализации данной таблицы.
-- Ответ: вторая нормальная форма