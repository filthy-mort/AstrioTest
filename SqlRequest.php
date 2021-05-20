SELECT
    worker.first_name,
    worker.last_name,
    GROUP_CONCAT(child.name SEPARATOR ','),
    car.model
FROM
    worker
LEFT JOIN child ON worker.id = child.user_id
LEFT JOIN car ON worker.id = car.user_id
WHERE
    car.user_id = worker.id
GROUP BY
    worker.id