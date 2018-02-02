# Server Side Rendering Example

Usinga Apache and it’s Server Side Includes functionality and mod_rewrite to route traffic, we are able to combine multiple languages and runtimes to create a single response. This way any backend (Java, PHP, other) can generate parts of the response using a different technology -- for example an Angular or React Server Side Rendering module. That separate technology can ping back to the original server to fetch data to render via API.

