# Route Documentation 
## Notes
 - All routes must be hit with the base `https://aaveg.net`. Note the `https`.
 - Every response is a JSON object, with two keys - `status_code` and `message`
 - Status codes follow standard HTTP code conventions - a `200` is a successful hit, and a `4XX` is an error.


### GET Routes

Path                       | Description
---------------------------|-------------------
`/`                        | Splash page
`/scoreboard`              | Scoreboard page
`/about`                   | About Aaveg page
`/team`                    | Team page
`/admin` or `/admin/login` | Admin Login
`/blog`                    | Blog page
`/blog/single/{blog_id}`   | View blog with given `blog_id`
`/blog/archives`           | View all blog posts 


----------


### POST /scoreboard/getall
> Returns scores along with event details, grouped by cup 

####Parameters
    none

####Response
    {
      "status_code": Integer,
      "message": {
        "Culturals": [
          {
            "event_name": String,
            "event_category": String,
            "event_id": Integer,
            "diamond_score": Float,
            "agate_score": Float,
            "coral_score": Float,
            "jade_score": Float,
            "opal_score": Float
          },
        ],
        "Sports": [
          {
            "event_name": String,
            "event_category": String,
            "event_id": In,
            "diamond_score": Float,
            "agate_score": Float,
            "coral_score": Float,
            "jade_score": Float,
            "opal_score": Float
          },
        ],
        "Miscellaneous": [
          {
            "event_name": String,
            "event_category": String,
            "event_id": Integer,
            "diamond_score": Float,
            "agate_score": Float,
            "coral_score": Float,
            "jade_score": Float,
            "opal_score": Float
          },
        ]
      }
    }


----------


### POST /scoreboard/geteventscores
> Returns scores along with event details, given `event_name`
 
####Parameters
    {
        "event_name" : String
    }

####Response
    {
      "status_code": Integer,
      "message": [
        {
          "event_id": Integer,
          "diamond_score": Float,
          "agate_score": Float,
          "coral_score": Float,
          "jade_score": Float,
          "opal_score": Float,
          "event_name": String,
          "event_start_time": String->"hh:mm:ss",
          "event_end_time": String->"hh:mm:ss",
          "event_venue": String,
          "event_desc": String,
          "event_date": String->"yyyy-mm-dd",
          "event_cluster": String,
          "event_category": String
        }
      ]
    }


----------


## Event Routes
### POST /events/getall
> Returns event details of all events, grouped by cluster

####Parameters
    none
####Response
    {
      "status_code": Integer,
      "message": {
        String->Cluster : [
          {
              "event_id": Integer,
              "event_name" : String,
              "event_start_time": String->"hh:mm:ss",
              "event_end_time": String->"hh:mm:ss",
              "event_venue": String,
              "event_desc": String,
              "event_date": String->"yyyy-mm-dd",
              "event_cluster": String,
              "event_category": String
          },
        ]
      }
    }


----------


### POST /events/getallnames
> Returns event names of all events

####Parameters
    none
####Response
    {
      "status_code": Integer,
      "message": [
        String,
      ]
    }


----------


### POST /events/geteventbyname
> Returns event details of a single event given `event_name`

####Parameters
    {
        "event_name" : String
    }
####Response
    {
      "status_code": Integer,
      "message": {
              "event_id": Integer,
              "event_name" : String,
              "event_start_time": String->"hh:mm:ss",
              "event_end_time": String->"hh:mm:ss",
              "event_venue": String,
              "event_desc": String,
              "event_date": String->"yyyy-mm-dd",
              "event_cluster": String,
              "event_category": String
          },
    }


----------


## Blog Routes
### POST /blog/getAllPosts
> Returns all blog posts

####Parameters
    none
####Response
    {
      "status_code": Integer,
      "message": [
            {
              "blog_id": Integer,
              "author_name": String,
              "title": String->HTML,
              "subtitle": String,
              "updated_at": String->"yyyy-mm-mm hh:mm:ss"
            },
        ]
    }


----------


### POST /blog/getLatestPosts
> Returns latest n blog posts, given `post_count`

####Parameters
    {
        "post_count": Integer
    }
####Response
    {
      "status_code": Integer,
      "message": [
            {
              "blog_id": Integer,
              "author_name": String,
              "title": String->HTML,
              "subtitle": String,
              "updated_at": String->"yyyy-mm-mm hh:mm:ss"
            },
        ]
    }


----------


### POST /blog/getBlogById
> Returns blog post of the given `blog_id`

####Parameters
    {
        "blog_id": Integer
    }
####Response
    {
      "status_code": Integer,
      "message": {
          "blog_id": Integer,
          "author_name": String,
          "title": String->HTML,
          "subtitle": String,
          "updated_at": String->"yyyy-mm-mm hh:mm:ss"
        }
    }


----------


### POST /blog/getauthors
> Returns list of authors

####Parameters
    none
####Response
    {
      "status_code": Integer,
      "message": [
          String,
        ]
    }


----------


### POST /blog/getBlogTitles
> Returns list of post titles

####Parameters
    none
####Response
    {
      "status_code": Integer,
      "message": [
          String,
        ]
    }