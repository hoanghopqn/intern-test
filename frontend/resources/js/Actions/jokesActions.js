import { GET_JOKES, GET_JOKES_ID } from "../Constants/jokesConstants";

export const getJokes = (data) => {
    return {
        type: GET_JOKES,
        payload: data,
    };
};
export const getJokesID = (data) => {
    return {
        type: GET_JOKES_ID,
        payload: data,
    };
};