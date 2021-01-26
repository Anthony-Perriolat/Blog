SELECT Text, Pseudo
FROM Articles
         INNER JOIN Authors ON Articles.Authors_id = Authors.id
ORDER BY Articles.id
    LIMIT 10