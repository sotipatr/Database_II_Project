DROP TABLE t1;
DROP TABLE t2;
DROP TABLE t3;
DROP TABLE t4;
DROP TABLE t5;
DROP TABLE t6;
DROP TABLE t7;
DROP TABLE t8;
DROP TABLE t9;
DROP TABLE t10;
DROP TABLE t11;



CREATE TABLE t1
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt1 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t1
  OWNER TO postgres;

insert into t1
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section1 i1, section1 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

CREATE TABLE t2
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt2 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t2
  OWNER TO postgres;

insert into t2
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section2 i1, section2 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist2 double precision;
UPDATE t1
SET dist2 = t2.dist
FROM t2
WHERE t1.id1 = t2.id1 and t1.id2=t2.id2;

CREATE TABLE t3
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt3 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t3
  OWNER TO postgres;

insert into t3
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section3 i1, section3 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist3 double precision;
UPDATE t1
SET dist3 = t3.dist
FROM t3
WHERE t1.id1 = t3.id1 and t1.id2=t3.id2;

CREATE TABLE t4
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt4 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t4
  OWNER TO postgres;

insert into t4
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section4 i1, section4 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist4 double precision;
UPDATE t1
SET dist4 = t4.dist
FROM t4
WHERE t1.id1 = t4.id1 and t1.id2=t4.id2;

CREATE TABLE t5
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt5 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t5
  OWNER TO postgres;

insert into t5
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section5 i1, section5 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist5 double precision;
UPDATE t1
SET dist5 = t5.dist
FROM t5
WHERE t1.id1 = t5.id1 and t1.id2=t5.id2;



CREATE TABLE t6
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt6 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t6
  OWNER TO postgres;

insert into t6
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section6 i1, section6 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist6 double precision;
UPDATE t1
SET dist6 = t6.dist
FROM t6
WHERE t1.id1 = t6.id1 and t1.id2=t6.id2;


CREATE TABLE t7
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt7 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t7
  OWNER TO postgres;

insert into t7
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section7 i1, section7 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist7 double precision;
UPDATE t1
SET dist7 = t7.dist
FROM t7
WHERE t1.id1 = t7.id1 and t1.id2=t7.id2;


CREATE TABLE t8
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt8 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t8
  OWNER TO postgres;

insert into t8
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section8 i1, section8 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist8 double precision;
UPDATE t1
SET dist8 = t8.dist
FROM t8
WHERE t1.id1 = t8.id1 and t1.id2=t8.id2;


CREATE TABLE t9
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt9 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t9
  OWNER TO postgres;

insert into t9
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section9 i1, section9 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist9 double precision;
UPDATE t1
SET dist9 = t9.dist
FROM t9
WHERE t1.id1 = t9.id1 and t1.id2=t9.id2;

CREATE TABLE t10
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt10 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t10
  OWNER TO postgres;

insert into t10
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section10 i1, section10 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist10 double precision;
UPDATE t1
SET dist10 = t10.dist
FROM t10
WHERE t1.id1 = t10.id1 and t1.id2=t10.id2;

CREATE TABLE t11
(
  id1 integer NOT NULL,
  id2 integer NOT NULL,
  dist double precision,
  CONSTRAINT keyt11 PRIMARY KEY (id1, id2)
)

WITH (
  OIDS=FALSE
);
ALTER TABLE t11
  OWNER TO postgres;

insert into t11
SELECT i1.id, i2.id, cube_distance(i1.point, i2.point)
FROM section11 i1, section11 i2
where i1.id!=i2.id
ORDER BY cube_distance(i1.point, i2.point);

ALTER TABLE t1 ADD COLUMN dist11 double precision;
UPDATE t1
SET dist11 = t11.dist
FROM t11
WHERE t1.id1 = t11.id1 and t1.id2=t11.id2;


