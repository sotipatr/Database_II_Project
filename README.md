# Database_II_Project
This is a web application that uses a Database with songs. The user picks one song of the song list in the Database and the application produces a list with the songs that is mostly close to the sound of the selected song (useing similarity queries). __
##This procedure has the 6 basic steps:##
*The 1st one is to pick the song list and add it in the Database__
*The 2nd is to export specific attributes (chroma vectors), using the __Matlab Toolbox: Matlab Audio Analysis Library____
  The order of execution of the Matlab Audio Analysis Library functions is as follows:__
    1. __create_data.m__: reading items in the songs folder__
    2. __audioanalysis_db2.m__: export attributes of each song__
    3. __demoChromaVector.m__: calculate chroma vectors of each song__
    4. __stFeatureExtraction.m__: segmentation and extraction of a set of attributes__
*The 3rd step is the indexing of each song to 11 vectors with 12 attributes each using the object ___cube___. In the song list there are covers of the same song, so in that case all chroma coefficients and by extension the ___cube___ objects of these songs will be spatially closer to each other than with the rest of the songs in the list. So, the similarity queries use the __cube_distance__ function that calculates the distance between 2  ___cube___ objects and then the average value of 11 distances of the corresponding ___cube___ objects.__
*The 4th step is to store the time series representations using __DBMS Postgresql 9.4__.__
  The sql code executed in Postgresql is as follows:
    1. __Create_tables.sql__ : construction of 11 tables __
    2. __Cube.sql__ : for each record of the above tables a cube object is created __
    3. __Dist_all.sql__ : in each table section_i the distances of between two ___cube___ objects are calculated
and the results are stored in table t_i where i = 1 ... 11 __
    4. __Avg.sql__ : calculation of the average  of the cube distances for each song __
 The average table it was stored in __phpmyadmin__ software tool named as avg_dist, so it can execute
the user's similarity queries. __
*The 5th step is to save the metadata for each song (artist, song title, file type, file size in bytes, song duration in sec, category, signal graph). The production of  the graphic representations was done in __Matlab__ tool, using the __eikones.m__ script. The set of metadata was stored in __phpmyadmin__, in the table named metadata. __
*The 6th step is the construction Graphical User Interface (GUI) of the application, that uses a web page that offers 2 different kind of searches:
  * ___Search by metadata__ (__search.php__): The user selects a category or artistor song title and the application returns the list of songs that satisfy the key search. __
  * ___Search by song content___ (__search_similar.php__): The user enters the song title of a song and a number k of the desired results and the most similar songs of the selected one are returned.
