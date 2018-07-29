CREATE EXTENSION cube;

ALTER TABLE section1 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx1 ON section1 USING gist (point);
UPDATE section1 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section2 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx2 ON section2 USING gist (point);
UPDATE section2 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section3 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx3 ON section3 USING gist (point);
UPDATE section3 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section4 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx4 ON section4 USING gist (point);
UPDATE section4 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section5 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx5 ON section5 USING gist (point);
UPDATE section5 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section6 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx6 ON section6 USING gist (point);
UPDATE section6 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section7 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx7 ON section7 USING gist (point);
UPDATE section7 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section8 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx8 ON section8 USING gist (point);
UPDATE section8 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section9 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx9 ON section9 USING gist (point);
UPDATE section9 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section10 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx10 ON section10 USING gist (point);
UPDATE section10 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);

ALTER TABLE section11 ADD COLUMN point cube;
CREATE INDEX sitems_point_idx11 ON section11 USING gist (point);
UPDATE section11 SET point = cube(ARRAY[c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12]);
