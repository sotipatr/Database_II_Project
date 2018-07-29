CREATE TABLE avg
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyavg PRIMARY KEY (id1, id2)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE avg
  OWNER TO postgres;
  

insert into avg
SELECT id1, id2,
       (SELECT AVG(Col)
        FROM   (VALUES(dist),
                      (dist2),
                      (dist3), (dist4), (dist5), (dist6), (dist7), (dist8), (dist9), (dist10), (dist11)) V(Col)) AS avg_dist
FROM   ( SELECT *
		from t1 
         ) as average;
		 
select * from avg order by id1 asc, dist asc;
		 
